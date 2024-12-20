<x-mail::message>
{{-- Header --}}
# 🎉 New Job Listing Created!

{{-- Job Title --}}
## **Job Title: {{ $job->title }}**

---

{{-- Introduction & CTA --}}
Congratulations! Your job listing has been successfully created and is now live.  
You can view and manage your job listing by clicking the link below:

<x-mail::button :url="url('/jobs/' . $job->id)" color="success">
    🎯 View Your Job Listing
</x-mail::button>

---

{{-- Additional Details --}}
### **Job Details**
- **Title:** {{ $job->title }}
- **Posted On:** {{ now()->format('F j, Y') }}
- **Salary:** {{ $job->salary }}
- **Status:** Active  
- **View Link:** [View the Job Listing]({{ url('/jobs/' . $job->id) }})

---

{{-- Motivational Footer --}}
We wish you the best in finding the perfect candidate for your job.  
If you have any questions or need further assistance, feel free to reach out to us.

**Happy Hiring! 🚀**

---

Thanks,<br>
**{{ config('app.name') }}**  
<small style="color: gray;">Your Job Listing Partner</small>
</x-mail::message>
